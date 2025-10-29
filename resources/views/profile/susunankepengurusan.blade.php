@extends('layouts.app')
@section('title', 'Susunan Kepengurusan - HMI CABANG PONOROGO')
@section('content')

<div class="container mx-auto px-6 py-12">
    <div class="grid lg:grid-cols-3 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <h1 class="text-2xl font-semibold">Susunan Kepengurusan</h1>
            <p class="mt-4">Welcome to the HMI profile page. Below you can find more information about HMI and its activities.</p>
        </div>


        <!-- Sidebar -->
        @include('layouts.sidebar')
    </div>
</div>

<script>
    // Get the buttons and category lists
    document.getElementById('see-more-btn').addEventListener('click', function() {
        // Show the full category list
        document.getElementById('category-list-all').classList.remove('hidden');
        // Hide the 'See More' button and show the 'Show Less' button
        document.getElementById('see-more-btn').classList.add('hidden');
        document.getElementById('see-less-btn').classList.remove('hidden');
    });

    document.getElementById('see-less-btn').addEventListener('click', function() {
        // Hide the full category list
        document.getElementById('category-list-all').classList.add('hidden');
        // Show the 'See More' button and hide the 'Show Less' button
        document.getElementById('see-more-btn').classList.remove('hidden');
        document.getElementById('see-less-btn').classList.add('hidden');
    });
</script>
@endsection
