@include('User.layout.header')

<div class="container-fluid">
    <div class="text-center">
        <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Posts</h2>
    </div>
    <div class="row">
        @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td><img src="{{url("uploads/$post->image")}}" height="60" width="60" alt="Image"></td>
        </tr>
        @endforeach
    </table>
</div>
@include('User.layout.footer')