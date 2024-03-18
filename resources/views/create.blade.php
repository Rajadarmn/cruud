<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="navbar bg-neutral text-neutral-content">
        <button class="btn btn-ghost text-xl">daisyUI</button>
      </div>

     <form action="/store" method="POST">
     @csrf
    <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text">What is your name?</span>

        </div>
        <input name="nama" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
        <div class="label">
        </div>

        <div class="label">
            <span class="label-text">your table?</span>
  
          </div>
          <input name="meja" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
          <div class="label">
          </div>

          <div class="label">
            <span class="label-text">your time?</span>
  
          </div>
          <input name="waktu" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
          <div class="label">
          </div>

          <button class="btn btn-outline btn-info">save</button>
      </label>
    </form>
</body>
</html>