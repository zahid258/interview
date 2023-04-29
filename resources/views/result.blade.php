<div class="card bg-primary-subtle " style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Result</h5>



        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Correct Ans</div>
                </div>
                <span class="badge bg-primary rounded-pill">{{$result['correct']}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Wrong Ans</div>
                </div>
                <span class="badge bg-primary rounded-pill">{{$result['inCorrect']}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Skip Ans</div>

                </div>
                <span class="badge bg-primary rounded-pill">{{$result['skiped']}}</span>
            </li>
        </ol>

    </div>
</div>
