@extends('adminlte::page')

@section('content_header')
@endsection

@section('content')
    <div class="px-10 pt-5">
        <button class="btn btn-primary mb-3" onclick="openAddModal()">Add Resource</button>

        <table id="resourcestable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Video</th>
                    <th>PDF</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resources as $resource)
                    <tr>
                        <td>{{ $resource->id }}</td>
                        <td>{{ $resource->name }}</td>
                        <td>{{ Str::limit($resource->description, 50, '...') }}</td>
                        <td>{{ $resource->video->title }}</td>
                        <td><a href="{{ $resource->pdf }}" target="_blank">View PDF</a></td>
                        <td>
                            <!-- Edit Button -->
                            <button onclick="openEditModal({{ $resource->id }})" class="btn btn-info">Edit</button>

                            <!-- Delete Button -->
                            <button onclick="deleteResource({{ $resource->id }})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $resource->id }}" tabindex="-1"
                        aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Resource</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="editResourceForm" method="POST" enctype="multipart/form-data"
                                    action="/dashboard/resources/{{ $resource->id }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="editResourceName">Resource Name</label>
                                            <input type="text" class="form-control" id="editResourceName" name="name"
                                                required value="{{ old('name', $resource->name) }}">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            <label for="editResourceDescription">Description</label>
                                            <textarea class="form-control" id="editResourceDescription" name="description" required cols="30" rows="7">{{ old('description', $resource->description) }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            <label for="editResourceVideo">Video</label>
                                            <select class="form-control" id="editResourceVideo" name="video_id" required>
                                                @foreach ($videos as $video)
                                                    <option value="{{ $video->id }}"
                                                        {{ $video->id == $resource->video_id ? 'selected' : '' }}>
                                                        {{ $video->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('video_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            <label for="editResourcePDF">PDF</label>
                                            <input type="file" class="form-control" id="editResourcePDF" name="pdf">
                                            @error('pdf')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

        <!-- Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Create a New Resource</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="addResourceForm" method="POST" enctype="multipart/form-data"
                        action="/dashboard/resources/store">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ResourceName">Resource Name</label>
                                <input type="text" class="form-control" id="ResourceName" name="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <label for="ResourceDescription">Description</label>
                                <textarea class="form-control" id="ResourceDescription" name="description" cols="30" rows="7"></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <label for="ResourceVideo">Video</label>
                                <select class="form-control" id="ResourceVideo" name="video_id">
                                    @foreach ($videos as $video)
                                        <option value="{{ $video->id }}">{{ $video->title }}</option>
                                    @endforeach
                                </select>
                                @error('video_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <label for="ResourcePDF">PDF</label>
                                <input type="file" class="form-control" id="ResourcePDF" name="pdf">
                                @error('pdf')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Resource</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#resourcestable').DataTable({
                    pageLength: 3
                });
            });

            // Function to open Add Modal
            function openAddModal() {
                $('#addModal').modal('show');
            }

            function openEditModal(id) {
                var modalid = '#editModal' + id;
                console.log(modalid);
                $(modalid).modal('show');
            }

            // Function to handle delete request
            function deleteResource(id) {
                if (confirm("Are you sure you want to delete this resource?")) {
                    // Create a temporary form to send the DELETE request
                    let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `/dashboard/resources/${id}`;

                    // Add CSRF token
                    let csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = '{{ csrf_token() }}';
                    form.appendChild(csrfInput);

                    // Add hidden DELETE method input
                    let methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'DELETE';
                    form.appendChild(methodInput);

                    // Append to the body and submit the form
                    document.body.appendChild(form);
                    form.submit();
                }
            }
        </script>
    </div>
@endsection
