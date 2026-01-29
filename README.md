# jddominicanfarm.com

VersiÃ³n creada sobre PHP Codeigniter 4X

## Docker

Construir la imagen:

```bash
docker build -t jddominicanfarm .
```

Ejecutar localmente:

```bash
docker run --rm -p 8080:80 --name jddominicanfarm jddominicanfarm
```

Publicar en AWS ECR (ejemplo):

```bash
AWS_ACCOUNT_ID=123456789012
AWS_REGION=us-east-1
REPO_NAME=jddominicanfarm

aws ecr create-repository --repository-name $REPO_NAME --region $AWS_REGION
aws ecr get-login-password --region $AWS_REGION | docker login --username AWS --password-stdin $AWS_ACCOUNT_ID.dkr.ecr.$AWS_REGION.amazonaws.com

docker tag jddominicanfarm:latest $AWS_ACCOUNT_ID.dkr.ecr.$AWS_REGION.amazonaws.com/$REPO_NAME:latest
docker push $AWS_ACCOUNT_ID.dkr.ecr.$AWS_REGION.amazonaws.com/$REPO_NAME:latest
```