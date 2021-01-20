<div class="card bg-white w-6/12 p-6 mx-auto">

  <div class="card-header font-extrabold">{{ $formHeader }}</div>

  <div class="card-body pt-6">

    <form action="{{ URL::to('/carbon-offset-calculator') }}" method="get">

      <label class="font-bold">Start of Membership</label><br/>

      <input type="date" name="subscriptionStartDate" class="border-1 border-black mt-3 mb-6" /><br/>

      <label class="font-bold mt-3">How many months?</label><br/>

      <input type="number" name="scheduleInMonths" class="border-1 bg-gray-200 mt-3 mb-6" /><br/>

      <input type="submit" class="py-2 px-3 mt-3" value="See schedule" />

    </form>

  </div>

  </div>

</div>
