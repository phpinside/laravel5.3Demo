@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">管理评论</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Comment</th>
                                <th>User</th>
                                <th>Page</th>
                                <th>编辑</th>
                                <th>删除</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->content }}</td>
                                    <td>{{ $comment->nickname }}</td>
                                    <td><a href="{{ url('article/'.$comment->article->id) }}" target="_blank">{{ $comment->article->title }}</a></td>
                                    <td><a  class="btn btn-success" href="{{ url('admin/comment/'.$comment->id.'/edit') }}" >编辑</a></td>
                                    <td>
                                        <form action="{{ url('admin/comment/'.$comment->id) }}" method="POST"
                                              style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection