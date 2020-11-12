<div class="flex p-4  border-b border-gray-400">
    <div class="mr-1 flex-shrink-0">
        <img src="/images/logo.svg"
             alt=""
             class="rounded-full mr-2">
    </div>

    <div>

        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>


@if($tweet->user==(auth()->user()))
            <a class="btn btn-danger bg-red-400 shadow py-0 px-2 rounded-lg text-white"
               href="/delete?rn={{$tweet->id}}"
              >Delete</a>
    @endif

    </div>

</div>
