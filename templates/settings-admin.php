<?php
script('spreed', ['settings-admin']);
style('spreed', ['settings-admin']);
?>

<div id="spreed" class="section">
    <form id="spreed_settings_form" class="spreed_settings">
        <h2 class="app-name">Spreed video calls</h2>
        <span id="spreed_settings_msg" class="msg"></span>
        <p>
            <label for="stun_server"><?php p($l->t('STUN server')) ?></label>
            <input type="text" id="stun_server"
                   name="stun_server" placeholder="stunserver:port"
                   value="<?php p($_['stunServer']) ?>" />
        </p>
        <p>
            <em><?php p($l->t('The STUN server is used to determine the public address of participants behind a router.')) ?></em>
        </p>
        <p>
            <label for="turn_server"><?php p($l->t('TURN server')) ?></label>
            <input type="text" id="turn_server"
                   name="turn_server" placeholder="https://turn.example.org"
                   value="<?php p($_['turnServer']) ?>" />
        </p>
        <p>
            <label for="turn_server_secret"><?php p($l->t('TURN server shared secret')) ?></label>
            <input type="text" id="turn_server_secret"
                   name="turn_server_secret" placeholder="shared secret"
                   value="<?php p($_['turnServerSecret']) ?>" />
        </p>
        <p>
            <label for="turn_server_protocols"><?php p($l->t('TURN server protocols')) ?></label>
            <select id="turn_server_protocols" name="turn_server_protocols">
                <option value="udp,tcp"
                    <?php p($_['turnServerProtocols'] === 'udp,tcp' ? 'selected' : '') ?>>
                    udp and tcp</option>
                <option value="udp"
                    <?php p($_['turnServerProtocols'] === 'udp' ? 'selected' : '') ?>>
                    udp only</option>
                <option value="tcp"
                    <?php p($_['turnServerProtocols'] === 'tcp' ? 'selected' : '') ?>>
                    tcp only</option>
            </select>
        </p>
        <p>
            <em><?php p($l->t('The TURN server is used to proxy the traffic from participants behind a firewall.')) ?></em>
        </p>
    </form>
</div>
