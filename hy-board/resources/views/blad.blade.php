@extends('layout.layout')

@section('title', 'blad')

@section('contents')
    <h1>콘텐츠 영역 확인</h1>
    <p>영역 확인중</p>


@endsection

@section('if')
@if($data['gender']==='여자')
    <span>남자남자</span>
@elseif($data['addr']==='대구')
    <span>대구대구</span>
@else
    <span>모든 조건 탈락</span>
@endif
@endsection