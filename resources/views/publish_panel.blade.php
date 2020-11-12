<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form  method="POST" action="/home">

        @csrf
                <textarea name="body"
                          class="w-full"
                          placeholder="What's Up Dev"
                          required
                ></textarea>
        <hr class="my-4" >
        <footer class="flex justify-between">
            <img src="/images/logo.svg"
                 alt=" your avatar"
                 class="rounded-full mr-2">

            <button type="submit" class="bg-blue-500 shadow py-2 px-2 rounded-lg text-white "> Tweet A row !</button>
        </footer>

    </form>


</div>
