<div>
    {{-- wire:poll.750ms --}}
    <!-- Start User Online -->
            <div class="chat-sidebar-list">
                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                    data-wrapper-class="chat-sidebar-list">
                    <div class="chat-header">
                        <h5 class="list-heading">En ligne</h5>
                    </div>
                    <ul class="media-list list-items">
                        @foreach ($all_users as $users)
                            @if ($users->isOnline())
                                <li class="media">
                                    <img class="media-object" src="/images/photos/avatars/{{ $users->avatar }}" 
                                        width="35" height="35" alt="profil_user"> 
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">{{ $users->nom.' '.$users->prenom }}</h5>
                                        <div class="media-heading-sub">Superviseur</div>
                                    </div>
                                </li>
                            @endif 
                        @endforeach    
                    </ul>
                    <div class="chat-header">
                        <h5 class="list-heading">Hors ligne</h5>
                    </div>
                    <ul class="media-list list-items">
                        @foreach ($all_users as $users)
                            @if ($users->isOnline() == false)
                                <li class="media">
                                    <img class="media-object" src="/images/photos/avatars/{{ $users->avatar }}" 
                                        width="35" height="35" alt="profil_user"> 
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">{{ $users->nom.' '.$users->prenom }}</h5>
                                            @if ($users->last_seen == '')
                                                <div class="media-heading-sub">Superviseur</div>
                                            @else
                                                <div class="media-heading-sub">Enseignant</div>
                                                <div class="media-heading-small">en ligne {{ $users->last_seen->locale('fr_Fr')->diffForHumans() }}</div>
                                            @endif
                                        
                                    </div>
                                </li>
                            @endif 
                        @endforeach 
                    </ul>
                    
                </div>
                    <!-- Debut bouton permettant de voir tous les utilisateurs en ligne ou non -->
                        <div class="profile-userbuttons">
                            <a type="button" href="#" class="btn btn-circle red btn-sm">Voir Plus</a>
                        </div>
                    <!-- bouton permettant de voir tous les utilisateurs en ligne ou non -->
            </div>
    <!-- End User Online -->
</div>
