<?php return 'ssh -o UserKnownHostsFile=/tmp/test user@example.com \'bash -se\' << \\EOF-SPATIE-SSH
whoami
EOF-SPATIE-SSH';
