@extends('layouts.app')
@section('title')
<title>CB Ingé - Agenda</title>
@endsection
@section('content')
<h1>Agenda</h1>
<iframe class="w-100 view-container-border"src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23168e33&amp;ctz=Europe%2FBrussels&amp;src=bGpiMWhxcGdtcjBpdmlhZ2Q1NTExdmRhaTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%237986CB&amp;showPrint=0&amp;showTz=0&amp;showTitle=1&amp;showNav=1&amp;showDate=1&amp;showTabs=1" style="border-width:0" width="800" height="600" frameborder="0" scrolling="yes"></iframe>
@endsection