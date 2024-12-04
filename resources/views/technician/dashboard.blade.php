@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <h1>Technician Dashboard</h1>
        <div class="icons">
            <a href="{{ route('hardware') }}" class="icon" data-tooltip="Go to the Hardware section">
                <img src="{{ asset('image/hardware.png') }}" alt="Hardware" />
                <span>Hardware</span>
            </a>
            <a href="{{ route('software') }}" class="icon" data-tooltip="Explore Software tools">
                <img src="{{ asset('image/software.png') }}" alt="Software" />
                <span>Software</span>
            </a>
            <a href="{{ route('otherDevices') }}" class="icon" data-tooltip="Manage Other Devices">
                <img src="{{ asset('image/otherdevice.png') }}" alt="Other Devices" />
                <span>Other Devices</span>
            </a>
            <a href="{{ route('layout') }}" class="icon" data-tooltip="View the Layout">
                <img src="{{ asset('image/layout.png') }}" alt="Layout" />
                <span>Layout</span>
            </a>
        </div>
        <footer class="footer">
            &copy; 2024 UiTM Raub
        </footer>
    </div>
@endsection
