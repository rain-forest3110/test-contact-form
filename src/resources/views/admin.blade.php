@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
@endsection

@section('content')
<div class="todo__alert">
  <div class="todo__alert--success">
    Todoを作成しました
  </div>
</div>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="admin__content">
      <div class="admin__heading">
        <h2>Admin</h2>
      </div>
    </div>
    
      @endsection
