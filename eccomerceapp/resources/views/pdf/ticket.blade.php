
<style>
  @page {
    size: 10cm 30cm landscape;
  }
</style>
@foreach ($transaction->transactionDetails as $detail)
  <div style="padding: 5px; font-family: Arial, Helvetica, sans-serif; page-break-before: always;  display: block; background:blue;">
    <div style="float: left">
      <h1 style="color:red; font-size:2.5rem;">{{ $event->name }}</h1>
      <h2 class="">{{ $detail->ticket->name }}</h2>
      <div class="">{{ $event->start_time->format('l, d F Y, H:i') }}</div>
      <div class="">{{ $event->duration }} hour(s)</div>
      <div class="">{{ $event->location }}</div>
      <div style="margin-top: 20px; font-size: 28px; font-family: monospace">{{ $detail->code }}</div>
    </div>
@endforeach
</div>