<h1 align="center" style="color :black">
<a href="http://hamdirhibi-cv.francecentral.cloudapp.azure.com/">
    Hamdi Rhibi 

</a>
</h1>

# 📋 Introduction 

<p> as part of the cloud project validation i create this Portfolio web page including, as following you will find each the description of each step to built this work including every command used, So bring your cafee and get ready for the show !!   </p>


<div align="center">
<img src="./assets/images/login.png"  />

</div>



# 🎉 Technologies used 

- PHP 
- Docker 
- Kubernetes 
- Helm 
- AKS  (azure kubernetes services )

# 📋 Requirements 

- PHP 

- Git  (https://www.atlassian.com/git/tutorials/install-git) 

- Docker .

- Minikube 

- Microsoft azure including the following services (AKS, PUBLIC IP , RESOURCE GROUP )

# 📖 Run The Project

- First of all clone the project : git clone https://github.com/hamdirhibi/Hamdi-Rhibi-official-website.git

- cd Hamdi-Rhibi-official-website

- You have three options to run this project 

First Option (without docker): 

- executing the PHP project locally by copying the project folder in /var/html if you are using Linux or passing it within wamp if you are using windows ..

-open your browser and pass http://localhost/me

-and its done!

Second Option (with docker) : 


- RUN docker build --rm -f "Dockerfile" -t hamdirhibi-cv:latest "." 

- RUN docker run -d -it -p 8000:80/tcp -v your-path-folder:/usr/src/app  --name hamdirhibi-cv hamdirhibi-cv:latest

- open your browser and pass http://localhost:8000/

- EVERY THING is perfect now after applying some modification on code you have to commit your changes 

- docker commit your-path-folder/

- and its done!


Third Option (create kubernetes cluster and run it ) : 

- Local test using minikube : 

- kubectl apply hamdirhibi-secret.yaml 

- kubectl apply hamdirhibi-configmap.yaml 

- kubectl apply hamdirhibi.yaml 

- Now you can access to your cv within the browser using the service because its work as a load balancer ( you can get your cluster ip address pas describing your service )

- how to describe your service : kubectl describe service hamdirhibi-service 

- TIPS : To get more information about others component : kubectl describe (pod/deployment/service/secret/configmap) name-of-component

- You can specify a domain Name to your cv rather than cluster ip adress , all you have to do is to add ingress type file and specify the host, and second step open terminal : sudo vim /etc/hosts and add line below localhost containing "your-cluster-ip your-domain name" example  : 192.168.64.5 hamdirhibi.com

- open new nav and pass your-domain-name.com 

- BOMMMMMMM awesome !! 

- new challenge ?  lets run prometheus and grafana locally using helm!! 

- RUN helm install prometheus stable/prometheus-operator

- to access grafana you need to configure ingress to port forward the grafana service : RUN kubectl port-forward deployment/prometheus-grafana 3000

- go to localhost:3000 and login with (admin prom-operator)

- What do you think about grafana 






<div align="center">
<img src="./assets/images/node_installation.png"  />
</div> 


- thats awesome ! lets move to the Front-end  config now ! 

- cd DATA-LABELING-FRONT-END && npm install 

-ng serve

<div align="center">
<img src="./assets/images/angular_installation.png" />
</div> 


- cd .. 

- cd Rest-API-for-Dextr-Model-Deep-Extreme-Cut-Deep-Learning 

- pip install -r requirements.txt

- python main.py

<div align="center">
<img src="./assets/images/dextr_installation.png"  />
</div> 


Wow that's  super simple ? 


## 🚀 Test It ? 

that's it ? of course not , here you will find ec2 instance link    : 


you can use the test account to test app features  : 

email : geekrhibi@gmail.com
password: hamdirhibi


##  Contact Me

don't hesitate to contact me if there any problem or suggestion :
- e-mail : geekrhibi@gmail.com
- linkedin : hamdirhibi
- telegram : 3ezdine junior
