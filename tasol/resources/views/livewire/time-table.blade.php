<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form>
            <div class="card row">
                <div class="form-group">
                    <label for="" class="form-label col-2">Term
                        <select name="term_id" id="" wire:model="term_id" class="form-control col-4">
                            @foreach($terms as $term)
                            <option value="{{$term->id}}">{{$term->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    <label for="" class="form-label col-2">Date
                        <input type="date" wire:model="date"  class="form-control col-4">
                    </label>
                    </div>
            </div>
            <table class="table">
                <thead>
                    <th>Sno</th>
                    <th>Subject</th>
                    <th>Faculty</th>
                    <th>Session Start</th>
                    <th>Duration</th>
                    <th>Session End</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <select name="subject_id.0" id="" class="form-control"  wire:model="subject_id.0">
                                <option value="" selected disabled>Select</option>
                                @if ($subjects)
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </td>
                        <td>
                            <select name="faculty_id.0" id="" class="form-control" wire:model="faculty_id.0">
                                <option value="" selected disabled>Select</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="datetime-local" class="form-control" wire:model="start_time.0"
                                placeholder="Enter start_time">
                            @error('start_time.0')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="number" class="form-control" wire:model="duration.0"
                                placeholder="In minutes">
                            @error('duration.0')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="datetime-local" class="form-control" wire:model="stop_time.0"
                                placeholder="Enter stop_time">
                            @error('stop_time.0')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <div class="col-md-2">
                                <button class="btn text-white btn-info btn-sm"
                                    wire:click.prevent="add({{ $i }})">Add</button>
                            </div>
                        </td>
                    </tr>
                    @foreach ($inputs as $key => $value)
                        <tr>
                            <td>{{ $loop->iteration + 1 }}</td>
                            <td>
                                <select name="subject_id" id="" class="form-control"
                                    wire:model="subject_id.{{ $value }}">
                                    <option value="" selected disabled>Select</option>
                                    @if ($subjects)
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </td>
                            <td>
                                <select name="faculty_id" id="" class="form-control"
                                    wire:model="faculty_id.{{ $value }}">
                                    <option value="" selected disabled>Select</option>
                                    @foreach ($faculties as $faculty)
                                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="datetime-local" class="form-control"
                                    wire:model="start_time.{{ $value }}" placeholder="Enter start_time">
                                @error('start_time.{{ $value }}')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="datetime-local" class="form-control"
                                    wire:model="stop_time.{{ $value }}" placeholder="Enter stop_time">
                                @error('stop_time.{{ $value }}')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </td>

                            <td class="col-md-2">
                                <button class="btn btn-danger btn-sm"
                                    wire:click.prevent="remove({{ $key }})">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>