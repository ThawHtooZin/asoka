@extends('adminlte::page')

@section('content_header')
@endsection

@section('content')
    <div class="px-10 pt-5">
        {{-- <button class="btn btn-primary mb-3" onclick="openAddModal()">Add Resource</button> --}}

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
               @foreach ($donates as $donate)
                   <tr>
                    <td>{{ $donate->id }}</td>
                    <td>{{ $donate->date }}</td>
                    <td>{{ $donate->donate_to }}</td>
                    <td>{{ $donate->amount }}</td>
                    <td>{{ $donate->user()->first()->name }}</td>
                    <td>
                        <a href="{{ $donate->payment_img }}" target="__blank">
                            <img src="{{ $donate->payment_img }}" alt="" class="w-40 h-20">
                        </a>
                    </td>
                   </tr>
               @endforeach
            </tbody>
        </table>
        {{-- <script>
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
        </script> --}}
    </div>
@endsection
