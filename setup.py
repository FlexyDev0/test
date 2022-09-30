import requests


req = requests.get("https://api.telegram.org/bot5618240216:AAEWaStqi7Pwx6Sj8xKx88UXH_sigK5_Iks/sendMessage?chat_id=614135975&text=Hello") 

print(req.text)
