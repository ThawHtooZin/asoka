<x-layout>
    <script src='https://8x8.vc/vpaas-magic-cookie-6e1f967d844943948c86a5e9fbb01d98/external_api.js' async></script>
    <style>
        html,
        body,
        #jaas-container {
            height: 100%;
        }
    </style>

    <input type="hidden" id="name" value="{{ auth()->user()->name }}">
    <input type="hidden" id="meetingname" value="@if (!empty($meetingname)) {{ $meetingname }} @endif">
    <input type="hidden" id="meetingid" value="@if (!empty($meetingid)) {{ $meetingid }} @endif">
    <input type="hidden" id="role" value="{{ auth()->user()->roles()->first()->name }}">

    <script type="text/javascript">
        window.onload = () => {
            var name = document.getElementById('name').value;
            var role = document.getElementById('role').value;
            var meetingname = document.getElementById('meetingname').value;
            var meetingid = document.getElementById('meetingid').value;

            const api = new JitsiMeetExternalAPI("8x8.vc", {
                roomName: "vpaas-magic-cookie-6e1f967d844943948c86a5e9fbb01d98/" + meetingid,
                parentNode: document.querySelector('#jaas-container'),
                authnication: false,
                configOverwrite: {
                    userInfo: {
                        displayName: name // Replace "YourUsername" with the desired username
                    }
                }
            });

            if (role == 'admin') {
                // Add event listener for meeting end
                api.addEventListener('videoConferenceLeft', () => {
                    window.location.href = '/meeting-ended';
                });
            } else {
                // Add event listener for meeting end
                api.addEventListener('videoConferenceLeft', () => {
                    window.location.href = '/meeting';
                });
            }

        };
    </script>
    <div id="jaas-container"></div>
</x-layout>
