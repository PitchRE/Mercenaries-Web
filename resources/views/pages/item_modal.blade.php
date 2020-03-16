<div id="modal-item-{{$item->id}}" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img src="{{$item->image ?? "https://previews.123rf.com/images/abluecup/abluecup1309/abluecup130900082/22175873-a-3d-human-character-a-question-mark.jpg"}}"
                            alt="
                            Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{$item->name}}</strong> <small>{{$item->price}} <i class="fas fa-coins"
                                    style="color: gold"></i></small>
                        </p>
                        @if($item->head_armor != null)
                        Head Armor: {{$item->head_armor}} <br>
                        @endif
                        @if($item->body_armor != null)
                        Body Armor: {{$item->body_armor}} <br>
                        @endif
                        @if($item->leg_armor != null)
                        Leg Armor: {{$item->leg_armor}} <br>
                        @endif
                        @if($item->speed_rating != null && $item->type != "itp_type_horse")

                        Speed Rating: {{$item->speed_rating}} <br>
                        @endif
                        @if($item->swing_damage != null)
                        Swing Damage: {{$item->swing_damage}} ({{$item->swing_damage_type}})<br>
                        @endif
                        @if($item->thrust_damage != null)
                        Thrust Damage: {{$item->thrust_damage}} ({{$item->thrust_damage_type}})<br>
                        @endif
                        @if($item->horse_speed != null)
                        Horse Speed: {{$item->horse_speed}} <br>
                        @endif
                        @if($item->missile_speed != null)
                        Missile Speed: {{$item->missile_speed}} <br>
                        @endif
                        @if($item->weight != null)
                        Weight: {{$item->weight}} <br>
                        @endif
                        @if($item->horse_maneuver != null)
                        Horse Maneuver: {{$item->horse_maneuver}} <br>
                        @endif

                        @Debug: <code>{{$item->model_name}}</code>
                    </div>
                    <nav class="level is-mobile">
                        <div class="level-left">
                            <a class="level-item" aria-label="retweet">
                                <span class="icon is-small">

                                    <!-- <i class="fas fa-retweet" aria-hidden="true"></i> -->
                                </span>
                            </a>
                            <a class="level-item" aria-label="like">

                            </a>
                        </div>
                    </nav>
                </div>
            </article>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>