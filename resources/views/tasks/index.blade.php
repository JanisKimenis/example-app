@extends('layouts.app')

@section('content')
    <a href="{{ route('tasks.create') }}"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
        Add New Task
    </a>

    @if ($tasks->isEmpty())
        <p class="mt-4">No tasks found. Start by adding one!</p>
    @else
        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($tasks as $task)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                {{ $task->id }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                {{ $task->title }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                {{ $task->description ?? 'N/A' }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
