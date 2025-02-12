



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>couriers</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="btn btn-sm btn-secondary" href={{ route('dashboard') }}>Dashboard</a>
            <a class="btn btn-sm btn-primary" href={{ route('couriers.index') }}>couriers</a>
            
            
            
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('couriers.create') }}>Add courier</a>
                </div>
            </div>
    </nav>


 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
   
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            @forelse ($couriers as $courier)
            
            <div class="card">
                <div class="card-header">
                    <label for="sender_name">SHIPPER NAME</label>
                    <h5 class="card-title">{{ $courier->shipper_name }}</h5>
                </div>
               
                <div class="card-body">
                    <label for="status">STATUS</label>
                    <p class="card-text">{{ $courier->status }}</p>
                </div>
                <div class="card-body">
                    <label for="comment">COMMENT</label>
                    <p class="card-text">{{ $courier->comment }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('couriers.edit', $courier->id) }}" class="btn btn-primary btn-sm">UPDATE</a>
                    <br><br>

                    <a href="{{ route('couriers.show', $courier->id) }}" class="btn btn-secondary btn-sm">Show Details</a><br><br>
                    
                     
                    
                    
                    <form action="{{ route('couriers.destroy', $courier->id) }}" method="post" class="delete-form">
                        @csrf
                        @method('DELETE')<br><br>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    
                </div>
            </div>
            
            @empty
            <div class="card-body">Courier Not Found.</div>
            @endforelse
          
        </div>
         {{$couriers->links()}}
    </div>
    
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.delete-form');
        
        deleteForms.forEach(function (form) {
            form.addEventListener('submit', function (event) {
                const confirmed = confirm('Are you sure you want to delete this courier?');
                
                if (!confirmed) {
                    event.preventDefault();  // Stop form submission if not confirmed
                }
            });
        });
    });
</script>

</html>