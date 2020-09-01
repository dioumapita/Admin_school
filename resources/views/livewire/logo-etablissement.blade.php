<div 
x-data="{ isUploading: false, progress: 0 }"
x-on:livewire-upload-start="isUploading = true"
x-on:livewire-upload-finish="isUploading = false"
x-on:livewire-upload-error="isUploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    {{-- message de succès de la mis  à jour du logo de l'etablissement --}}
        @if(session()->has('msg_logo'))
            <div wire:poll.2s class="alert alert-success">
                <strong>{{ session('msg_logo') }}</strong>
            </div>
        @endif
    <form wire:submit.prevent="logo">
        <div class="col-md-12 col-sm-12">
            <h4>Logo *</h4>
                    @if($logo)
                        <div class="thumb-center">
                            <img class="img-responsive" alt="logo_etablissement"
                                src="{{ $logo->temporaryUrl() }}" id="logo">
                        </div>
                    @else
                        <div class="thumb-center">
                            <img class="img-responsive" alt="logo_etablissement"
                                src="images/photos/logos/{{ $nom_logo }}" id="logo">
                        </div>
                    @endif
            <br>
                <div class="form-group">
                    <input type="file" wire:model='logo' class="form-control @error('logo')is-invalid @enderror" accept="image/*">
                    <!-- Progress Bar -->
                        <div class="center" x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    <!-- Message d'erreur du logo -->
                    @error('logo')
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
