<label class="form-label form-label-lg " for="FirstName">Movie</label>
<select name="movie_id" class="form-control" id="exampleFormControlSelect1">
    @foreach ($movies as $movie)
        <option {{ $movie->id == $event->movie_id ? 'selected' : '' }} value="{{ $movie->id }}">{{ $movie->name }}
        </option>
    @endforeach
</select>
<label class="form-label form-label-lg " for="FirstName">Show Time</label>
<select name="show_time_id" class="form-control" id="exampleFormControlSelect1">
    @foreach ($show_times as $show_time)
        <option {{ $show_time->id == $event->show_time_id ? 'selected' : '' }} value="{{ $show_time->id }}">
            {{ $show_time->start_at }} - {{ $show_time->end_at }}</option>
    @endforeach
</select>

<input type="text" name="day_id" value="{{ $day }}" hidden>
