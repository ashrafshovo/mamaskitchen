@extends('layouts.dashboard')

@section('title', 'Bread || Edit')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @include('layouts.include.msg')

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Bread Paragraph</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content">
                            <form method="post" action="{{ route('bread.update', $bread->id) }}" >
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Paragraph</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating"></label>
                                                <textarea name="paragraph" id="mytextarea">{{ $bread->paragraph }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('bread.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script src="{{ asset('back/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    
    <script>

      tinymce.init({

        selector: '#mytextarea',

        plugins: [

          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',

          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',

          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'

        ],

        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +

          'alignleft aligncenter alignright alignjustify | ' +

          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'

      });

    </script>
@endpush
