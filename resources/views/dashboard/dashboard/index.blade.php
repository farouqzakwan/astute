@extends('dashboard.index')
@push('contents')
  <div class="grid gap-6 mt-8 mb-8 md:grid-cols-2">    
      @livewire('dashboard.total-client')
      @livewire('dashboard.total-invoices')  
      @livewire('dashboard.invoice-amount')  
  </div>

@endpush