#My application that has
the following functionalities,
**1. Sign-up** where the user will be allowed to enter his emailID and password along
with a secret code. That data will be validating and to creating new user but, if user already exist will show alert.

**2. Sign-in** where the user will be allowed to enter his emailID and password. This
data will be sent to the backend where it will be cross-checked with the data
available in the database and a proper response is returned to the frontend and redirect to comment page if credentials are correct otherwise it show alert for wrong data.

**3.Forget-password** where the user will be allowed to enter the email id and
secret code. This data will be sent to the backend and If the data matches with
any record already in the database then the password will be shown to the
user In frontend. if data wrong it shows invalid credentials message.

**4**.After sign-in the user will be presented with a text area where he will be able to
type any comments. After submitting, the comment will be taken to the backend
and saved in database and showing to the general comments panel and **highlight** the current user.

**5**.Below the text area, the user will also see other users' comments along with
the respective email ids next to them.

**6**.There will be a filter button on click it, the comment area will show only the
comments of the logged in user.
