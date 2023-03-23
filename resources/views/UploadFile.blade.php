<form
    action="upload"
    method="POST"
    class="form-example"
    enctype="multipart/form-data"
>
    @csrf
    <input type="file" placeholder="file upload" name="file" />
    <button type="submit"><strong>upload file</strong></button>
</form>
