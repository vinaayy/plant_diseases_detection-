import tensorflow as tf
from keras.models import load_model
# global graph, model, output_list

graph = tf.get_default_graph()
model = load_model('plant_app/AlexNetModel.hdf5')

output_dict = {'Apple scab ': 0,
               'Apple Black rot': 1,
               'Apple Cedar apple rust': 2,
               'Apple Healthy': 3,
               'Blueberry Healthy': 4,
               'Cherry Powdery mildew': 5,
               'Cherry Healthy': 6,
               'Corn Cercospora leaf spot Gray leaf spot': 7,
               'Corn Common rust': 8,
               'Corn Northern Leaf Blight': 9,
               'Corn Healthy': 10,
               'Grape Black rot': 11,
               'Grape Esca (Black Measles)': 12,
               'Grape Leaf blight (Isariopsis Leaf Spot)': 13,
               'Grape healthy': 14,
               'Orange Haunglongbing (Citrus greening)': 15,
               'Peach Bacterial spot': 16,
               'Peach Healthy': 17,
               'Pepper , bell Bacterial_spot': 18,
               'Pepper , bell Healthy': 19,
               'Potato Early blight': 20,
               'Potato Late blight': 21,
               'Potato Healthy': 22,
               'Raspberry Healthy': 23,
               'Soyabean Healthy': 24,
               'Squash Powdery mildew': 25,
               'Strawberry Leaf scorch': 26,
               'Strawberry Healthy': 27,
               'Tomato BacterialSpot': 28,
               'Tomato EarlyBlight': 29,
               'Tomato Late blight': 30,
               'Tomato Leaf Mold': 31,
               'Tomato Septoria leaf spot': 32,
               'Tomato Spider mites Two-spotted_spider_mite': 33,
               'Tomato TargetSpot': 34,
               'Tomato Yellow Leaf Curl Virus': 35,
               'Tomato Mosaic virus': 36,
               'Tomato healthy': 37}

output_list = list(output_dict.keys())
