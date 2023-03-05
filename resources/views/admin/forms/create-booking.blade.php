<x-input label="Name" name="name" type="text" required />
<x-input label="Email" name="email" type="email" required />
<x-input label="Mobile" name="mobile" type="number" required />

<label class="form-label form-label-lg " for="FirstName">Day <span style="color:red">*</span></label>
<select id="sel_day-{{ $movie->id }}" required name="day_id" class="form-control" data-movie-id="{{ $movie->id }}">
    <option value="">Select Day</option>
    @foreach ($movie->event->unique('day') as $event)
        <option value="{{ $event->day->id }}">{{ $event->day->day }}</option>
        {{-- <option   value="{{$show_time->id}}">{{ $show_time->start_at }} - {{ $show_time->end_at }}</option> --}}
    @endforeach
</select>
<label class="form-label form-label-lg " for="FirstName">Show Time<span style="color:red">*</span></label>
<input value="{{ $movie->id }}" name="movie_id" hidden />
<select name="show_time_id" required class="form-control" id="sel_time-{{ $movie->id }}">
    <option value="">Select Show Time</option>
</select>
