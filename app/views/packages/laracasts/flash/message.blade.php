@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="flash flash-{{ Session::get('flash_notification.level') }}">
            {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
            <i class="icon-cancel-circled2 flash-close"></i>
            <span>{{ Session::get('flash_notification.message') }}</span>
        </div>
    @endif
@endif
