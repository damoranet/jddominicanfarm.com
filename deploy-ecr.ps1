# AWS ECR Deployment Script for JD Dominican Farm

# Variables - Update these with your AWS values
$AWS_PROFILE = "damoranet"
$AWS_REGION = "us-east-1"
$AWS_ACCOUNT_ID = "084375576248"
$REPO_NAME = "jddominicanfarm"
$IMAGE_TAG = "latest"

$ECR_URL = "$AWS_ACCOUNT_ID.dkr.ecr.$AWS_REGION.amazonaws.com"
$FULL_IMAGE_NAME = "$($ECR_URL)/$($REPO_NAME):$($IMAGE_TAG)"

Write-Host "--- Starting Deployment to AWS ECR ---" -ForegroundColor Cyan
Write-Host "Profile: $AWS_PROFILE"
Write-Host "Region : $AWS_REGION"

# 1. Login to ECR
Write-Host "Step 1: Logging into AWS ECR..."
aws ecr get-login-password --region $AWS_REGION --profile $AWS_PROFILE | docker login --username AWS --password-stdin $ECR_URL
if ($LASTEXITCODE -ne 0) { Write-Error "Login failed"; exit }

# 2. Build the Docker Image
Write-Host "Step 2: Building Docker image..."
docker build -t $REPO_NAME .
if ($LASTEXITCODE -ne 0) { Write-Error "Build failed"; exit }

# 3. Tag the image
Write-Host "Step 3: Tagging image..."
docker tag "$($REPO_NAME):latest" $FULL_IMAGE_NAME

# 4. Push to ECR
Write-Host "Step 4: Pushing to ECR..."
docker push $FULL_IMAGE_NAME
if ($LASTEXITCODE -ne 0) { Write-Error "Push failed"; exit }

Write-Host "--- Deployment Complete! ---" -ForegroundColor Green
Write-Host "Image URL: $FULL_IMAGE_NAME"
