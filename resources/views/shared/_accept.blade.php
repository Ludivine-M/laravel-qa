@can ('accept', $model)
<a title="Mark this model as best model" class="{{ $model->status }} mt-2" onclick="event.preventDefault(); document.getElementById('accept-model-{{ $model->id }}').submit();">
    <i class="fa fa-check fa-2x"></i>
</a>
<form id="accept-model-{{ $model->id }}" action="{{ route('models.accept', $model->id) }}" method="POST" style="display:none;">
    @csrf
</form>
@else
@if ($model->is_best)
<a title="The question owner accepted this model as best model" class="{{ $model->status }} mt-2">
    <i class="fas fa-check fa-2x"></i>
</a>
@endif
@endcan