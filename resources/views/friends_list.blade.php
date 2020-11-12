<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
        <l1 class="mb-8">
            <div class="flex items-center text-sm">
                <img src="/images/logo.svg"
                     alt=""
                     class="rounded-full mr-2">
                {{$user->name}}
            </div>
        </l1>
    @endforeach
</ul>
