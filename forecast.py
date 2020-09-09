import requests
import json

api_url="https://api.forecast.io/forecast/%s/%f,%f"
api_key="<your_api_key>"
lat=42.38205
long=-71.10517

query_url = api_url % (api_key, lat, long)
r = requests.get(query_url)
if r.status_code != 200:
  print "Error:", r.status_code

json_weather = r.json()

print "Tomorrow will be ",
currentWeather =  json_weather['currently']['icon']
if "cloud" in currentWeather:
  print "Cloudy"
elif "rain" in currentWeather:
  print "Rain"
else:
  print "Clear"