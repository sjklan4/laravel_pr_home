@extends('layout.layout')

@section('title', 'blad')

@section('contents')
    <h1>콘텐츠 영역 확인</h1>
    <p>영역 확인중</p>


@endsection
<br>
<br>
@section('forelse')
    @forelse ($data as $item)
        <tr>
            <td>{{$item->Lno}}</td>
            <td>{{$item->list}}</td>
            <td>{{$item->Ltitle}}</td>
            <td>{{$item->Lcontent}}</td>
        </tr>
        <br>
    @empty
        
    @endforelse
    
@endsection
<button onclick="location.href='{{route('blade.write')}}'">작성</button>