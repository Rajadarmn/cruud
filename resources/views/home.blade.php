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

    

    @php
        $id=1;
    @endphp
    <div class="navbar bg-neutral text-neutral-content">
        <button class="btn btn-ghost text-xl">daisyUI</button>
      </div>
 
      <a href="/create" class="btn btn-outline btn-secondary">create</a>

      <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>no</th>
              <th>Name</th>
              <th>meja</th>
              <th>waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($main as $m)
            <!-- row 2 -->
            <tr class="hover">
              <th>{{ $m->id }}</th>
              <td>{{ $m->nama }}</td>
              <td>{{ $m->meja }}</td>
              <td>{{ $m->waktu }}</td>
              <td>
                <a href="/{{ $m->id }}/edit"><button class="btn btn-outline btn-success">edit</button></a>
                <form action="/update/{{ $m->id }}" method="post">
                    @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline btn-error">delete</button>
              </td>
            </form>
            </tr>
            @php
                $id++;
            @endphp
            @endforeach
          </tbody>
        </table>
      </div>
</body>
</html>