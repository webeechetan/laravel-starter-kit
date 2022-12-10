@extends('admin.layouts.app')
@section('title','Create a new page')
@section('header')
    <link rel="stylesheet" href="//unpkg.com/grapesjs/dist/css/grapes.min.css">
    <style>
        #gjs {
        border: 3px solid #444;
        }

        /* Reset some default styling */
        .gjs-cv-canvas {
        top: 0;
        width: 100%;
        height: 100%;
        }
        .gjs-block {
        width: auto;
        height: auto;
        min-height: auto;
        }
    </style>
@endsection
@section('content')
    <div id="gjs">
        <h1>Hello World Component!</h1>
    </div>
    <div id="blocks"></div>
@endsection
@section('footer')
    <script src="//unpkg.com/grapesjs"></script>
@endsection
@push('scripts')
<script>
    const editor = grapesjs.init({
    container: '#gjs',
    fromElement: true,
    height: '300px',
    width: 'auto',
    storageManager: false,
    panels: { defaults: [] },
    blockManager: {
    appendTo: '#blocks',
    blocks: [
      {
        id: 'section', // id is mandatory
        label: '<b>Section</b>', // You can use HTML/SVG inside labels
        attributes: { class:'gjs-block-section' },
        content: `<section>
          <h1>This is a simple title</h1>
          <div>This is just a Lorem text: Lorem ipsum dolor sit amet</div>
        </section>`,
      }, {
        id: 'text',
        label: 'Text',
        content: '<div data-gjs-type="text">Insert your text here</div>',
      }, {
        id: 'image',
        label: 'Image',
        select: true,
        content: { type: 'image' },
        activate: true,
      }
    ]
  },
    });
</script>
@endpush
