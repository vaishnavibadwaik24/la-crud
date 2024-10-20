@extends('categories.layout')
@section('content')

<div class="container shadow rounded">
    <h1 class="mt-4 text-center">Category Details</h1>
    <p class="fw-semibold">Name: {{ $category->name }}</p>
    <p class="fw-semibold">Description: {{ $category->description }}</p>
    <p class="fw-semibold">status: {{ $category->status }}</p>
</div>
