@csrf

{!! Form::label('', 'Título', ['class'=>'block font-medium text-sm text-gray-700']) !!}
{!! Form::text('title', old('title', $post->title), ['class'=>'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full']) !!}
    @error('title')<span class='text-xs text-red-600'>{{ $message }}</span>
    @enderror
{!! Form::label('', 'Contenido', ['class'=>'block font-medium text-sm text-gray-700']) !!}
{!! Form::textarea('body', old('body', $post->body), ['class'=>'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full', 'rows'=>'5', 'cols'=>'5']) !!}
   <span class='text-xs text-red-600'> @error('body'){{ $message }} @enderror</span>

    <div class="flex items-center justify-end mt-4">

    <a href="{{ route('posts.index') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Regresar</a>
    {!! Form::submit("Enviar", ['class'=>'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3']) !!}
</div>
