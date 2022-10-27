<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section style="background-color: #eee;">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <div class="container py-5">

    <div class="row">

      <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

        <h5 class="font-weight-bold mb-3 text-center text-lg-start">Members</h5>

        <div class="card">
          <div class="card-body">
            @forelse($users as $user)
            <ul class="list-unstyled mb-0">
              <li class="p-2 border-bottom" style="background-color: #eee;">
                <form action="{{ route('dashboard') }}" class="d-flex justify-content-center" method="GET">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <button type="submit">
                        <div class="d-flex flex-row">
                            <div class="pt-1">
                            @if($user->id == $idRequest)
                              <p class="fw-bold mb-0 text-primary">{{$user->name}}</p>
                            @else
                              <p class="fw-bold mb-0">{{$user->name}}</p>
                            @endif
                            <p class="small text-muted">mensagens</p>
                            </div>
                        </div>
                        <div class="pt-1">
                          @if($user->read_at == 1)
                            <p class="small text-muted mb-1">{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
                            <span class="badge bg-danger float-end">Nova mensagem</span>
                          @else
                              <span class="badge float-end">-</span>
                          @endif
                        </div>
                  </button>
                </form>
              </li>
              @empty
              sem usuários
              @endforelse
            </ul>
          </div>
        </div>

      </div>

      <div class="col-md-6 col-lg-7 col-xl-8">

        <ul class="list-unstyled">
          @foreach($messages as $message)
              @if(!$idRequest)
                vazio
              @else
                  @if($message->from == Auth::id())
                <li class="d-flex justify-content-end mb-4">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between p-3">
                      <p class="fw-bold mb-0">{{$message->users->name}}</p>
                      <p class="text-muted small mb-0"><i class="far fa-clock"></i> {{ date('d/m/Y H:i', strtotime($message->created_at)) }}</p>
                    </div>
                    <div class="card-body">
                      <p class="mb-0">
                        {{$message->content}}
                      </p>
                    </div>
                  </div>
                </li>
                @else
                  <li class="d-flex justify-content-start mb-4">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between p-3">
                        <p class="fw-bold mb-0">{{$message->users->name}}</p>
                        <p class="text-muted small mb-0"><i class="far fa-clock"></i> {{ date('d/m/Y H:i', strtotime($message->created_at)) }}</p>
                      </div>
                      <div class="card-body">
                        <p class="mb-0">
                          {{$message->content}}
                        </p>
                      </div>
                    </div>
                  </li>
                @endif
              @endif
          @endforeach
          @if(!$idRequest)
            vazio
          @else
            <form method="get" action="{{route('message.store')}}">
              @csrf
              <li class="bg-white mb-3">
                <div class="form-outline">
                  <input type="hidden" name="from" value="{{ Auth::id() }}">
                  <input type="hidden" name="to" value="{{ $idRequest }}">
                  <textarea class="form-control" name="content" id="textAreaExample2" rows="4"></textarea>
                  <label class="form-label" for="textAreaExample2">Message</label>
                </div>
              </li>
              <button type="submit" class="btn btn-info btn-rounded float-end">Send</button>
            </form>
          @endif
        </ul>
      </div>
    </div>
  </div>
</section>

</x-app-layout>
