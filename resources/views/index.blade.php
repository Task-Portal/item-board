@extends('layouts.base')

@section("title", "Main")

@section('main')
@if (count($comments)>0)


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена, руб.</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $c )


                <tr>
                    <td>
                        <h3>{{$c->title}}</h3>
                    </td>
                    <td>{{$c->price}}</td>
                    <td>
                        <a href="{{ route('detail', ['c'=>$c->id])}}">Подробнее...</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
@endsection("main")