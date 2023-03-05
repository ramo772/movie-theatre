    <x-input label="Name" name="name" value="{{$row->name}}" type="text" required/>
    <x-file-upload  name="image" title="Image" value="{{$row->image}}"   />
    <img width="65"  class="zoom" src="{{ $row->image }}">
