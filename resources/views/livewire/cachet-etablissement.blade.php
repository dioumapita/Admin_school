<div
x-data="{ isUploading: false, progress: 0 }"
x-on:livewire-upload-start="isUploading = true"
x-on:livewire-upload-finish="isUploading = false"
x-on:livewire-upload-error="isUploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    @if (session()->has('msg_cachet'))
        <div wire:poll.2s class="alert alert-success" role="alert">
            <strong>{{ session('msg_cachet') }}</strong>
        </div>
    @endif
    <form wire:submit.prevent="save_cachet">
        <div class="col-md-12 col-sm-12">
            <h4>Cachet *</h4>
                @if ($cachet)
                    <div class="thumb-center">
                        <img class="img-responsive" alt="cachet_etablissement"
                            src="{{ $cachet->temporaryUrl() }}" id="cachet">
                    </div>
                @else
                    <div class="thumb-center">
                        <img class="img-responsive" alt="cachet_etablissement"
                            src="images/photos/cachets/{{ $nom_cachet }}" id="cachet">
                    </div>
                @endif  
            <br>
                <div class="form-group">
                    <input type="file" wire:model='cachet' class="form-control @error('cachet')is-invalid @enderror" accept="image/*">
                        <!-- Progress Bar -->
                        <div class="center" x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    <!-- Message d'erreur du cachet de l'etablissement -->
                    @error('cachet')
                        <span class="invalid-feedback" role="alert">
                            <strong id="msg_error_profil">{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="profile-usertitle-job">Cliquez pour changer le logo (Taille max:12M)</span>
                </div>
            <br>
        </div>
            <button type="submit" class="btn btn-primary btn btn-block">Mettre à jour</button>
    </form>
</div>
