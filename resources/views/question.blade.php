<div class="card bg-primary-subtle " style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Question {{ $next_index }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{$question_name}} </h6>

        <ul class="list-group">
            @foreach($question_options as $option)

            <li class="list-group-item"><input type="radio" name="answer" id="answer" value="{{$option->question_option_id}}"><span style="padding-left: 5px;">
                    {{$option->question_option}}
                </span>
            <input type="hidden" name="question_id" id="question_id" value="{{$option->question_id}}">
            <input type="hidden" name="next_index" id="next_index" value="{{$next_index}}">
            </li>
            @endforeach
        </ul>
        <div class="mt-2">
            <button type="button" class="btn btn-secondary" onclick="nextQuestion('skip')">Skip</button>
            <button type="button" class="btn btn-primary" onclick="nextQuestion('next')">Next</button>
        </div>

    </div>
</div>
