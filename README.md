# Deploying the book examples on OpenShift

```bash
oc new-app php~https://github.com/bkoz/phpmysql.git
oc new-app mysql -e MYSQL_USER=mysql -e MYSQL_PASSWORD=mysql -e MYSQL_DATABASE=sampledb -e MYSQL_ROOT_PASSWORD=mysql
oc env dc/phpmysql MYSQL_USER=mysql MYSQL_PASSWORD=mysql MYSQL_DATABASE=sampledb MYSQL_ROOT_PASSWORD=mysql
oc expose service phpmysql
oc get route
```
Now visit the route with a web browser.
