@foreach($post->comment as $comment)

<div class="border-top p-1 mb-3">
    <span>
        <strong>
            <a class="no-text-decoration black-color " href="">
            {{ $comment->user->name }}
            </a>
        </strong>
    </span>
    <div class="comments mt-1">
        <span>
        {{ $comment->content }}
        </span>
    </div>
</div>
@endforeach
</div>
