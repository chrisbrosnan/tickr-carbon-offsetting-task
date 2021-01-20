<div class="card bg-white w-6/12 p-6 mx-auto">

  <div class="card-header font-extrabold">{{ $resultsHeader }}</div>

  <div class="card-body pt-6">

    @foreach($scheduleData as $s)

      <p class="font-bold">{{ $s }}</p>

    @endforeach

  </div>

  </div>

</div>
