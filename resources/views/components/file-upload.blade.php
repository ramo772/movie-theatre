@props(['title' => '', 'name' => ''])
<div class="col form-group">

    <div class="custom-file my-2 py-2">
            <label class="custom-file-label form-label form-label-lg" >{{$title}}</label>

        <input type="file" name={{ $name }} id="custom-file-input-image" class="form-control my-1  mw-100">

    </div>
</div>


<script>
    var file = document.querySelector('custom-file-input-image');
    file.onchange(function() {
        //get the file name
        var fileName = document.getElementById("custom-file-input-image").files[0].name;
        //replace the "Choose a file" label

        $('.custom-file-label').html(fileName);
        console.log(fileName)

    })

</script>
