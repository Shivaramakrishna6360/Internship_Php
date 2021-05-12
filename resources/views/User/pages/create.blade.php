@include('User.layout.header')
<br>
<div class="container-fluid">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Create Posts</h2>
       </div>
        <br>
    </div>

<form action="{{url("posts")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-md-8">
            <div class="form-group col-md-6">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="form-group col-md-8">
            <div class="form-group col-md-6">
                <strong>Description:</strong>
                <textarea type="text" name="description" class="form-control" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div class="form-group col-md-8">
            <div class="form-group col-md-6">
                 <strong>Image:</strong>
                 <input type="file" class="form-control"  id="image" name="image">
            </div>
            <br>
        </div>
        <div class="form-group col-md-8 text-center">
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

</form>
</div>
<br>
@include('User.layout.footer')