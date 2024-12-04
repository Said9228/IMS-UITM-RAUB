<!-- resources/views/technician/hardware.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hardware Page</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Lab Name</th>
                    <th>Generate Report</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($labs as $index => $lab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $lab->name }}</td>
                        <td>
                            <!-- Form for file upload -->
                            <form action="{{ route('uploadReport', $lab->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="report_file" accept=".csv, .pdf, .xls">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>

                            <!-- Display the download link if a report exists -->
                            @if($lab->report_file)
                                <a href="{{ asset('storage/' . $lab->report_file) }}" class="btn btn-success" target="_blank">Download</a>
                            @endif
                        </td>
                        <td>
                            <!-- Verify button for Admin -->
                            @if(auth()->user()->is_admin) <!-- Check if user is admin -->
                                <form action="{{ route('verifyReport', $lab->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Verify</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
